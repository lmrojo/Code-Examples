using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace csharp
{
    class Backstage : IItem
    {
        Item _item;
        public Backstage(Item item)
        {
            _item = item;
        }
        public void UpdateQuality()
        {

            if (_item.Quality >= 2 && _item.Quality <= 50)
            {
                if(_item.SellIn <= 10 && _item.SellIn > 5)
                {
                    _item.Quality = _item.Quality + 2;
                }

                if (_item.SellIn <= 5)
                {
                    _item.Quality = _item.Quality +3;
                }

            }

            if(_item.SellIn < 0)
            {
                _item.Quality = 0;
            }

        }
    }
}
